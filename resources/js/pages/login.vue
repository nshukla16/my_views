<template>
    <div>
        <div class="container" style="margin-auto; width:40%; border-radius: 15px; background:light-grey; margin-top:60px">
            <h3 style="text-align:center">login</h3><br>
            <form @submit="onSubmit">
                <input type="text" class="form-control" placeholder="Enter user name"><br>
                <input type="text" class="form-control" placeholder="password"><br>
                <button style="" class="form-control btn btn-primary">Submit</button><br><br>
            </form>
            <router-link to="/registration" style="color:blue; text-align:center">New User</router-link>
            <!-- <router-view></router-view> -->
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        onsubmit(values) {
            console.log(values);
        }
    },
}
</script>
