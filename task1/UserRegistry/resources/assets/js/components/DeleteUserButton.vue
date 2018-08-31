<template>
    <div>
        <i class="fa fa-trash text-red" @click="showModal = true"></i>
        <div v-if="showModal" class="text-left">
            <transition name="modal">
                <div class="modal-mask">
                    <div class="modal-wrapper">
                        <div class="modal-container">

                        <div class="modal-header">
                            <h3>Confirm delete</h3>
                        </div>

                        <div class="modal-body">
                            <div class="form">
                                <p class="padding-top-0 padding-bottom-1">Please confirm that you want to delete this user.</p>
                                <form :action="'/users/'+userid" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" :value="csrf">
                                    <div class="text-right">
                                        <button class="btn btn-white" @click="showModal = false">
                                            Cancel
                                        </button>
                                        <input type="submit" class="btn btn-black text-white" value="Confirm" />
                                    </div>   
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
        props: ['userid'],
        data(){
            return{
                showModal: false,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        }
    }
</script>
