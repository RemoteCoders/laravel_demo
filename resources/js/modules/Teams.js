export default {
    data: function() {
        return {
            teamData: null,
            teamPlayers: null,
            teamId: null,
            firstName: "",
            lastName: "",
            teamId: 0,
            playerId: 0,
            errors: [],
            teamName: ""
        }
    },
    mounted() {
        this.fetchTeams();
    },
    methods: {
        editPlayer(player) {
            this.errors = [];
            this.firstName = player.first_name;
            this.lastName = player.last_name;
            this.teamId = player.team_id;
            this.playerId = player.id
            this.showModal('edit-player');
            this.hideModal('show-roster');
        },
        updatePlayer() {
            this.errors = [];
            if (this.firstName == "") {
                this.errors.push('First name is required');
            }
            if (this.lastName == "") {
                this.errors.push('Last name is required');
            }
            if (this.teamId == 0 || this.teamId == "") {
                this.errors.push('Team is required');
            }
            if (this.errors.length > 0) {
                return;
            }
            var data = {
                firstName: this.firstName,
                lastName: this.lastName,
                teamId: this.teamId
            };
            axios.put('/api/player/' + this.playerId, { data })
                .then(function(response) {
                    console.log(response);
                    this.hideModal('edit-player');
                }.bind(this))
                .catch(function(error) {
                    console.log("ERROR: " + error);
                }.bind(this));
            console.log("AFTER");
        },
        showRoster(teamId) {
            axios.get('/api/team/roster/' + teamId) .then(function(response) {
                    this.teamPlayers = response.data;
                    console.log(this.teamPlayers);
                    this.showModal('show-roster');
                }.bind(this))
                .catch(function(error) {
                    console.log("ERROR: " + error);
                }.bind(this));
        },
        hideRoster() {
            this.hideModal('show-roster');
        },
        showAddTeam() {
            this.teamName = "";
            this.showModal('add-team');
        },
        showModal(modalName) {
            this.$modal.show(modalName);
        },
        hideModal(modalName) {
            this.$modal.hide(modalName);
        },
        saveTeam: function() {
            this.errors = [];
            if (this.teamName == "") {
                this.errors.push('Team name is required');
                return;
            }
            var data = {
                teamName: this.teamName
            };
            axios.post('/api/team', { data })
                .then(function(response) {
                    this.fetchTeams();
                    this.hideModal('add-team');
                }.bind(this))
                .catch(function(error) {
                    console.log("ERROR: " + error);
                }.bind(this));
        },
        fetchTeams() {
            axios.get('/api/team') .then(function(response) {
                this.teamData = response.data;
            }.bind(this))
            .catch(function(error) {
                console.log("ERROR: " + error);
            }.bind(this));
        }
        
    }
}