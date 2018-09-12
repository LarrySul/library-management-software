<template>
<div>
    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to Tasued E-library</h3>

                <!-- <div class="home-content__buttons"> -->
                    <a href="#services" class="smoothscroll btn btn--stroke" style="color:#0179b5">
                        Register
                    </a>
                    <button id="a">
                        <a href="/studentlogin">Login</a>
                    </button>
                    <button id="a">
                        <a href="/login">Admin login</a>
                    </button>
                    
            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1--light">We Are Tasued E-Library</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                Library stock allocation software is an electronic library that will help/support users to get item that are available in the library. 

                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">127</div>
                <h5>Number of Books</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1505</div>
                <h5>Categories</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">109</div>
                <h5>Borrowed Books</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">102</div>
                <h5>Available Books</h5> 
            </div>

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Register Here</h3>
                <h1 class="display-2">Thank you for choosing our E-library platform</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Register</h3>
                    <form class="register group" novalidate="true" autocomplete="off" @submit.prevent="registerUser" method="post">
                        <div>
							<label class="firstname"></label>
                                <input type="text" name="firstname" v-model="register.firstname"  class="full-width"  v-validate="{required : true, regex: /^([A-Z a-z]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('firstname') }"
                                placeholder="firstname" required>
                                <span v-show="errors.has('firstname')" class="help is-danger">{{ errors.first('firstname') }}</span>
							
                        </div>
                        <div>
                            <label class="lastname"></label>
                                <input type="text" name="lastname" v-model="register.lastname" class="full-width"  v-validate="{required : true, regex: /^([A-Z a-z]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('lastname') }"
                                placeholder="lastname" required>
                                <span v-show="errors.has('lastname')" class="help is-danger">{{ errors.first('lastname') }}</span>
                            
                        </div>
                        <div>
                            <label class="email"></label>
                                <input type="email" name="email" v-model="register.email" class="full-width"  v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('email') }"
                                placeholder="Email Address" required>
                                <span v-show="errors.has('email')" class="help is-danger">{{ errors.first('email') }}</span>
                           
                        </div>
                        <div>
                            <label class="gender">Select Gender</label>
                                <select v-model="register.gender" class="full-width" name="gender" v-validate="{required : true}" :class="{'input': true, 'is-danger': errors.has('gender') }">
                               
                                <option>Male</option>
                                <option >Female</option>
                            </select> 
                            <span v-show="errors.has('gender')" class="help is-danger">{{ errors.first('gender') }}</span>
                        </div>
                        <div>
                            <label class="matric"></label>
                                <input type="text"  class="full-width"  name="matric" v-model="register.matric"  v-validate="{required : true, regex: /^([0-9]+)$/, min:11}" :class="{'input': true, 'is-danger': errors.has('matric') }" placeholder="Matric Number" maxlength="11" required>
                                <span v-show="errors.has('matric')" class="help is-danger">{{ errors.first('matric') }}</span>			
                           
                        </div>
                       <div>
                            <label class="college">  Select College </label>
                                <select v-model="register.college"  class="full-width" name="college" v-validate="{required : true}" :class="{'input': true, 'is-danger': errors.has('college') }" >
        
                                    <option >Cosit</option>
                                    <option >Cosmas</option>
                                    <option >Cohum</option>
                                    <option >Coavot</option>
                                </select>
                                <span v-show="errors.has('college')" class="help is-danger">{{ errors.first('college') }}</span>
                          
                          
                        </div>
                         
                        <div>
                            <label class="Department"></label>
                                <input type="text" name="department" class="full-width"  v-model="register.department"  v-validate="{required : true, regex: /^([A-Z a-z]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('department') }" placeholder="Department" required>
                                <span v-show="errors.has('department')" class="help is-danger">{{ errors.first('department') }}</span>
                          
                            
                        </div>
                         <div>
                            <label class="phone"></label>
                                <input type="text" name="phone"  class="full-width"  v-model="register.phone" v-validate="{required : true, regex: /^([0-9]+)$/, min:11}" :class="{'input': true, 'is-danger': errors.has('phone') }" placeholder="Phone number" maxlength="11" required>
                                   <span v-show="errors.has('phone')" class="help is-danger">{{ errors.first('phone') }}</span>
                            
                        </div>
                        <div>
                            <label class="password"> </label>
                                <input type="password" name="password" class="full-width"  v-model="register.password" v-validate="{required : true, regex: /^([A-Z a-z]+)$/, min:3}" :class="{'input': true, 'is-danger': errors.has('password') }" placeholder="Password" required>
                                 <span v-show="errors.has('password')" class="help is-danger">{{ errors.first('password') }}</span>
                           
                        </div>
                        <div>
                            <label for="mc-register" class="subscribe-message"> </label>
                                <input type="submit" class="btn--primary" name="register" value="Register">
                           
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Response</h3>
                    <div style="margin-top:50px; padding: 20px; font: italic 30px trajan; ">
					    <strong style="padding:30px; color:#00ff55" v-show="success" v-text="success"></strong>
				    </div>
                </div>
            </div>
        </div> <!-- end services-list -->
    </section> <!-- end s-services -->

      <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Library Section</h3>
                    <h1 class="display-2 display-2--light">We love what we do, check out some collection of our books</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                    <img src="images/portfolio/lady-shutterbug.jpg" 
                                         srcset="images/portfolio/lady-shutterbug.jpg 1x, images/portfolio/lady-shutterbug@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shelf
                                </h3>
                                <p class="item-folio__cat">
                                    Books
                                </p>
                            </div>
    
                            <a href="#" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <!-- <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p> -->
                            </div>
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                    <img src="images/portfolio/woodcraft.jpg" 
                                         srcset="images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                   Books
                                </h3>
                                <p class="item-folio__cat">
                                   Shelf
                                </p>
                            </div>
    
                            <a href="#" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <!-- <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p> -->
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                    <img src="images/portfolio/the-beetle.jpg"
                                         srcset="images/portfolio/the-beetle.jpg 1x, images/portfolio/the-beetle@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shelf
                                </h3>
                                <p class="item-folio__cat">
                                   Books
                                </p>
                            </div>
    
                            <a href="#" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <!-- <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p> -->
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-grow-green.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                    <img src="images/portfolio/grow-green.jpg" 
                                         srcset="images/portfolio/grow-green.jpg 1x, images/portfolio/grow-green@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Books
                                </h3>
                                <p class="item-folio__cat">
                                    Shelf
                                </p>
                            </div>
    
                            <a href="#" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <!-- <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p> -->
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-guitarist.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                    <img src="images/portfolio/guitarist.jpg" 
                                         srcset="images/portfolio/guitarist.jpg 1x, images/portfolio/guitarist@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shelf
                                </h3>
                                <p class="item-folio__cat">
                                    Books
                                </p>
                            </div>
    
                            <a href="#" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <!-- <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p> -->
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-palmeira.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                    <img src="images/portfolio/palmeira.jpg"
                                         srcset="images/portfolio/palmeira.jpg 1x, images/portfolio/palmeira@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Shelf
                                </h3>
                                <p class="item-folio__cat">
                                    Books
                                </p>
                            </div>
    
                            <a href="#" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <!-- <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p> -->
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->
    </section> <!-- end s-works -->

</div>
</template>
<style>
#a{
    background-color: transparent !important ; 
    color: #39b54a;
    border: 0.2rem solid #39b54a;
}
a{
    color: #39b54a;  
}
</style>

<script>
import axios from 'axios'

export default{
	data(){
		return{
            success:false,
            status:false,
			register:{
                firstname:'',
                lastname:'',
                email:'',
				gender:'',
				matric:'',
				college:'',
				department:'',
                phone:'',
				password:''
            }
		}
	},
	methods: {
		registerUser() {
			let module = this;
			this.$validator.validateAll().then(result => {
				if (result) {
					axios.post('user/register', this.register)
					.then(response =>{
                        module.success = response.data.success;
                        this.$toaster.info('Yo! Registration successful');
						this.$router.push('/borrow');
                
					})
					.catch(error => {
                        this.$toaster.warning('Student already registered. !');
                        this.$router.push('/');
					});
				}
			})  
        }
	}
} 
</script>

