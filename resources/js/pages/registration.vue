<template>
    <div>
        <div class="container" style="margin-auto; width:40%; border-radius: 15px; background:light-grey; margin-top:60px">
            <h3 style="text-align:center">Signup</h3><br>
            <input v-model="name" type="text" class="form-control" placeholder="Enter name">
            <p class="error-log" v-if="isVisible">Enter Proper Name</p>
            <br>
            <input v-model="email" type="email" class="form-control" placeholder="Enter email">
            <p class="error-log" v-if="isVisible">Enter Correct Name</p>
            <br>
            <input v-model="password" type="password" class="form-control" placeholder="Enter password">
            <p class="error-log" v-if="isVisible">Enter Proper Name</p>
            <br>
            <input v-model="repeatPassword" type="password" class="form-control" placeholder="Confirm password">
            <p class="error-log" v-if="isVisible">Enter Proper Name</p>
            <br>
            <button style="" class="form-control btn btn-primary" @click="register_user">Submit</button><br><br>
            
            <router-link to="/login" style="color:blue; text-align:center">Existing User</router-link>
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
import { required, sameAs, minLength } from 'vuelidate/lib/validators'

export default {

    data(){
        return{
            name:'',
            email:'',
            password:'',
            repeatPassword:'',
            isVisible:false,
        }
    },
    validations: {
        password: {
        required,
        minLength: minLength(6)
        },
        repeatPassword: {
        sameAsPassword: sameAs('password')
        }
    },
    methods: {
        register_user(){
            if(this.name.length>2){
                const payload = {
                    name: this.name,
                    email: this.email,
                    password: this.password
                }
                axios.post('/api/info', payload)
                    .then(response => {
                    this.users = response.data;
                        console.log(response.data)
                    }); 
                console.log(this.name + ' ' + this.email + ' '+ this.password);
            }
            else{
                this.isVisible = true;
            }
        }
    }
}
</script>
<style scoped>
.error-log {
    color:red;
}
</style>