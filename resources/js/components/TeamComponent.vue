<template>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Team Name</th>
                    <th scope="col" class="text-right">
                        <button id="show-add-modal" @click="showAddTeam()" class="btn btn-outline-secondary">Add team</button>
                    </th>
                </tr>
            </thead>
            <template v-for="item in teamData">
                <tr>
                    <td>
                        <strong>{{item.name}}</strong>
                    </td>
                    <td class="text-right">
                        <button id="show-roster-modal" @click="showRoster(item.id)" class="btn btn-outline-secondary">Show Roster</button>
                    </td>
                </tr>
            </template>
        </table>
        <modal name="add-team">
          <div class="modal-mask">
              <div class="modal-wrapper">
                <div class="modal-container px-5 py-5">
                    <h3>Add Team</h3>
                    <div class="input-group mb-3">
                        <p v-if="errors.length">
                            <b>Please correct the following error(s):</b>
                            <ul>
                                <li v-for="error in errors">{{ error }}</li>
                            </ul>
                        </p>
                    </div>
                    <div class="input-group mb-3">
                        <input class="form-control" id="teamName" name="teamName" placeholder="Team Name" type="text" v-model="teamName">
                        <button class="btn btn-outline-secondary" v-on:click.prevent="saveTeam">
                            Save Team
                        </button>
                    </div>
                </div>
              </div>
            </div>
        </modal>
        <modal name="show-roster" :height="500">
            <div class="modal-mask">
                <div class="modal-wrapper">
                    <div class="modal-container px-1 py-1">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Player Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <template v-for="player in teamPlayers">
                                <tr>
                                    <td>
                                        <strong>{{player.first_name}} {{player.last_name}}</strong>
                                    </td>
                                    <td  class="text-right">
                                        <button id="show-player-modal" @click="editPlayer(player)" class="btn btn-outline-secondary">Edit Player</button>
                                    </td>
                                </tr>
                            </template>
                        </table>
                    </div>
                </div>
            </div>
        </modal>
        <modal name="edit-player" :height="500">
            <div class="modal-mask">
                <div class="modal-wrapper">
                    <div class="modal-container px-1 py-1">
                        <div class="input-group mb-3">
                            <p v-if="errors.length">
                                <b>Please correct the following error(s):</b>
                                <ul>
                                    <li v-for="error in errors">{{ error }}</li>
                                </ul>
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="firstName">First name</label>
                            <input class="form-control" id="firstName" name="firstName" placeholder="First Name" type="text" v-model="firstName">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last name</label>
                            <input class="form-control" id="lastName" name="lastName" placeholder="Last Name" type="text" v-model="lastName">
                        </div>
                        <div class="form-group">
                            <label for="teamId">Team</label>
                            <select v-model="teamId" id="teamId" class="form-control">
                                <option v-for="team in teamData" v-bind:value="team.id">
                                    {{ team.name }}
                                </option>
                            </select>
                        </div>
                        <button id="update-player" @click="updatePlayer()" class="btn btn-outline-secondary">Update Player</button>
                    </div>
                </div>
            </div>
        </modal>
    </div>
</template>

<script src="../modules/Teams.js"></script>

