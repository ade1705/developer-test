<template>
    <div>
        <button class="btn-black btn text-white" @click="showModal = true">Add New User</button>
        <div v-if="showModal" class="text-left">
            <transition name="modal">
                <div class="modal-mask">
                    <div class="modal-wrapper">
                        <div class="modal-container">

                        <div class="modal-header">
                            <h3>Add New User</h3>
                        </div>

                        <div class="modal-body">
                            <div class="form">
                                <form @submit="checkForm" action="/users" method="post">
                                    <div class="form__element">
                                        <div class="form__label">Name</div>
                                        <div class="form__input">
                                            <input type="text" v-bind:class="{ errorInput: hasError('name') }" placeholder="Enter your name" name="name" v-model="name"/>
                                            <span class="text-red" v-show="hasError('name')">{{ showError('name') }}</span>
                                        </div>
                                    </div>
                                    <div class="form__element">
                                        <div class="form__label">Surname</div>
                                        <div class="form__input">
                                            <input type="text" v-bind:class="{ errorInput: hasError('surname') }" placeholder="Enter your surname" name="surname" v-model="surname"/>
                                            <span class="text-red" v-show="hasError('surname')">{{ showError('surname') }}</span>
                                        </div>
                                    </div>
                                    <div class="form__element">
                                        <div class="form__label">Email</div>
                                        <div class="form__input">
                                            <input type="email" v-bind:class="{ errorInput: hasError('email') }" placeholder="Enter your email" name="email" v-model="email"/>
                                            <span class="text-red" v-show="hasError('email')">{{ showError('email') }}</span>
                                        </div>
                                    </div>
                                    <div class="form__element">
                                        <div class="form__label">Position</div>
                                        <div class="form__input">
                                            <input type="text" v-bind:class="{ errorInput: hasError('position') }" placeholder="Enter your position" name="position" v-model="position"/>
                                            <span class="text-red" v-show="hasError('position')">{{ showError('current position') }}</span>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <input type="submit" class="btn btn-black text-white" value="Save" />
                                        <button class="btn btn-white" @click="showModal = false">
                                            Cancel
                                        </button>
                                    </div>
                                    <input type="hidden" name="_token" :value="csrf">
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                showModal: false,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                errors: [],
                name: null,
                surname: null,
                email: null,
                position: null
            }
        },
        methods:{
            checkForm: function (e) {
                if (this.name && this.surname && this.email && this.position) {
                    return true;
                }

                this.errors = [];

                if (!this.name) {
                    this.errors.push('name');
                }
                if (!this.surname) {
                    this.errors.push('surname');
                }
                if (!this.email) {
                    this.errors.push('email');
                }
                if (!this.position) {
                    this.errors.push('position');
                }

                e.preventDefault();
            },
            hasError: function (type) {
                return this.errors.includes(type);                 
            },
            showError: function(type){
                let text = 'Please enter your '+type;
                return text;
            }
            
        },
        computed: {
        }
    }
</script>
