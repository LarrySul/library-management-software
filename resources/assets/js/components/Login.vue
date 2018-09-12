<template >
    <div>
        <div class="row half-bottom" style="background-color:#fff;margin:90px 0px 0px 70px">
            <div class="col-ten tab-full">
                <h1 style="text-align:center;">{{Yo}}</h1>
                <form id="contact-form" autocomplete="off" @submit.prevent="loginUser" method="post">
                     <div>
                        <label for="firstname">firstname</label>
                        <input type="text" class="full-width" name="firstname" v-model="firstname" v-validate="{required : true, regex: /^([A-Z a-z]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('firstname') }" placeholder="firstname" required>
                        <span v-show="errors.has('firstname')" class="help is-danger">{{ errors.first('firstname') }}</span>
                    </div>
                    <div>
                        <label for="matric">Matriculation Number</label>
                        <input type="text" class="full-width" name="matric" v-model="matric" v-validate="{required : true, regex: /^([0-9]+)$/, min:11}" :class="{'input': true, 'is-danger': errors.has('matric') }" placeholder="Matric Number" maxlength="11" required>
                        <span v-show="errors.has('matric')" class="help is-danger">{{ errors.first('matric') }}</span>			   
                    </div>
                   
                    <div>
                        <center>
                            <input class="btn--primary" type="submit" value="Submit">
                        </center>
                    </div>
                </form>
            </div>
        </div> <!-- end row -->
    </div> 
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            Yo: 'Student login module',
            
                matric: null,
                firstname: null
            
        }
    },
    methods:{
      loginUser(){
            let module = this;
			this.$validator.validateAll().then(result => {
				if (result) {
					axios.post('user/login', {matric:this.matric, firstname:this.firstname})
					.then(response=>{
                        module.success = response.data.success;
                        this.$toaster.info('viola! Login successful');
						this.$router.push('/borrow');
					}).catch(error => {
                        module.status = error.response.data.fail;
                        this.$toaster.error('Error! Invalid credentials');
                        this.$router.push('/studentlogin');
					})
				}
			}) 
        }
    }
}
</script>

