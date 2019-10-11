<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form"><b>Order Book Component</b></h4>
                    </div>
                    <div class="card-body">
                        <!-- <div class="card col-md-12 text-center"> -->
                            <div class="card-body">
                                <div class="featured-section">
                                    <div class="container">
                                        <h1 class="text-center">CSS Grid Example</h1>
                                        <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>
                                        <div class="text-center button-container">
                                            <a href="#" class="button">Featured</a>
                                            <a href="#" class="button">On Sale</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 form-group">
                                                <label class="text"><strong>Filter By Author</strong></label>
                                                <multiselect
                                                v-model="author_info"
                                                :options="author"
                                                :multiple="false"
                                                label="name"
                                                track-by="id"
                                                @input="search" />
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label class="text"><strong>Filter By Faculty</strong></label>
                                                <multiselect
                                                v-model="faculty_info"
                                                :options="faculty"
                                                label="name"
                                                track-by="id"
                                                @input="search" />
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label class="text"><strong>Filter By Course</strong></label>
                                                <multiselect
                                                v-model="course_info"
                                                :options="course"
                                                label="name"
                                                track-by="id"
                                                @input="search" />
                                            </div>
                                            <div class="col-md-3 form-group">
                                                <label class="text"><strong>Filter By Department</strong></label>
                                                <multiselect
                                                v-model="department_info"
                                                :options="department"
                                                label="name"
                                                track-by="id"
                                                @input="search" />
                                            </div>
                                        </div>
                                        <div class="products">
                                            <div class="card" v-for="(value,index) in resultData" :key="index">
                                                <div class="product">
                                                    <!-- <a href="#"><img :src="'/images/'+value.image" style="height:400px;width:400px;"></a> -->
                                                    <a href="#"><img :src="'/images/'+value.image" style="height:200px;width:200px;"></a>
                                                    <div class="cart">
                                                        <router-link to="/cart" class="text">
                                                            <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1">
                                                                <b>Add</b> <i class="fas fa-plus-circle"></i> <b>Cart</b>
                                                            </button>
                                                        </router-link>
                                                    </div>
                                                    <a href="#"><div class=" orange">{{value.name}}</div></a>
                                                    <div class=" green">version: {{value.version}} </div>
                                                    <div class=" red">Price: {{value.price}} BDT </div>
                                                </div>
                                            </div>
                                        </div> <!-- end products -->

                                        <div class="text-center button-container">
                                            <a href="#" class="button">View more products</a>
                                        </div>
                                    </div> <!-- end container -->
                                </div> <!-- end featured-section -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect'
    export default {
        components: { Multiselect },
        props: ['author','faculty','course','department'],
         data(){
            return {
                resultData: [],
                author_info:{
                    id:''
                },
                faculty_info:{
                    id:''
                },
                course_info:{
                    id:''
                },
                department_info:{
                    id:''
                },
            }
        },
        methods:{
            search(){
                    axios.get('/search/author_info?author_info='+this.author_info.id+'&faculty_info='+this.faculty_info.id
                    +'&course_info='+this.course_info.id+'&department_info='+this.department_info.id)
                    .then((response) => {
                    this.resultData = response.data;
                    console.log(response.data)
                });
            },
        },
        mounted() {
            console.log('Component mounted.')
            this.search();
        }
    }
</script>
