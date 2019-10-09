<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h4 class="card-title" id="basic-layout-form"><b>Booklist Component</b></h4>
                            </div>
                            <div class="col-md-2">
                                <router-link to="/book" class="nav-link">
                                    <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1">
                                        <i class="fa fa-check"></i> <b>Add Item</b>
                                    </button>
                                </router-link>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="table_head bg-dark">
                                <tr>
                                    <th>S/L</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Version</th>
                                    <th>Price</th>
                                    <th>Author</th>
                                    <th>Faculty No</th>
                                    <th>Course</th>
                                    <th>Department</th>
                                    <th>Receive Date</th>
                                    <th>Status</th>
                                    <th class="text-center min-width-85">Action</th>
                                </tr>
                                </thead>
                                <tbody v-if="resultData!=''">
                                    <tr v-for="(value,index) in resultData" :key="index">
                                        <td>{{++index}}</td>
                                        <td>{{value.name}}</td>
                                        <td><img :src="'/images/'+value.image" style="height:80px;width:80px;"></td>
                                        <td>{{value.version}}</td>
                                        <td>{{value.price}}</td>
                                        <td>{{value.author_name}}</td>
                                        <td>{{value.faculty_name}}</td>
                                        <td>{{value.course_name}}</td>
                                        <td>{{value.department_name}}</td>
                                        <td>{{value.created_at}}</td>
                                        <td>
                                            <!-- <div v-if="value.status == 1" class="badge badge-warning badge-round ">
                                                Created
                                            </div>
                                            <div v-if="value.status == 2" class="badge badge-info badge-round ">
                                                Drafted
                                            </div>
                                            <div v-if="value.status == 3" class="badge badge-primary badge-round ">
                                                Submitted
                                            </div> -->
                                        </td>
                                        <td class="text-center">
                                            <!-- <a  v-if="value.status != '3'" class="btn btn-danger btn-sm" @click="deleteData(value.id)">
                                                <i aria-hidden="true" class="fa fa-trash-o btnColor"></i>
                                            </a>
                                            <a v-if="value.status != '3' || value.status < '1'" class="btn btn-primary btn-sm" @click="editData(value.id)">
                                                <i aria-hidden="true" class="fa fa-pencil-square-o btnColor">
                                                </i>
                                            </a>
                                            <a class="btn btn-primary btn-sm"  @click="viewData(value.id)">
                                                <i aria-hidden="true" class="fa fa-eye btnColor"></i>
                                            </a> -->
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody v-else>
                                    <tr>
                                        <td colspan="4">No Data Available.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card col-md-12">
                <div class="card-header">Filter</div>
                 <div class="row">
                    <div class="col-md-3">
                        <label><strong>Author</strong></label>
                    </div>
                    <div class="col-md-3">
                        <label><strong>Faculty</strong></label>
                    </div>
                    <div class="col-md-3">
                        <label><strong>Course</strong></label>
                    </div>
                    <div class="col-md-3">
                       <label><strong>Department</strong></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <multiselect
                        v-model="author_id"
                        :options="author"
                        :multiple="false"
                        label="name"
                        track-by="id"
                        @input="search" />
                    </div>
                    <div class="col-md-3">
                        <multiselect
                        v-model="faculty_id"
                        :options="faculty"
                        label="name"
                        track-by="id"
                        @input="search" />
                    </div>
                    <div class="col-md-3">
                        <multiselect
                        v-model="course_id"
                        :options="course"
                        label="name"
                        track-by="id"
                        @input="search" />
                    </div>
                    <div class="col-md-3">
                        <multiselect
                        v-model="department_id"
                        :options="department"
                        label="name"
                        track-by="id"
                        @input="search" />
                    </div>
                </div>
                <div class="card-body" v-for="(value,index) in resultFilter" :key="index">
                    <img :src="'/images/'+value.image" style="height:400px;width:400px;">
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
                resultFilter: [],
                author_id:'',
                faculty_id:'',
                course_id:'',
                department_id:'',
            }
        },
        methods:{
            search(){
                    axios.get('/filter/author_id?author_id='+this.author_id.id+'&faculty_id?faculty_id='+this.faculty_id.id
                    +'&course_id?course_id='+this.course_id.id+'&department_id?department_id='+this.department_id.id)
                    .then((response) => {
                    this.resultFilter = response.data.data;
                    console.log(response.data)
                });
            },
        },
        mounted() {
            axios.get('/book').then((response) => {
                this.resultData = response.data.data;
                console.log(response.data)
            });

        },

    }
</script>
