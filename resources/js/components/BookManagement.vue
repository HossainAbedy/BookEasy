<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h4 class="card-title" id="basic-layout-form"><b>Book Management Component</b></h4>
                            </div>
                            <div class="col-md-2">
                                <router-link to="/booklist" class="nav-link">
                                    <button type="button" class="btn btn-primary btn-min-width mr-1 mb-1">
                                        <i class="fa fa-check"></i> <b>View List</b>
                                    </button>
                                </router-link>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST"  enctype="multipart/form-data" v-on:submit.prevent="store">
                            <div class="col-md-12">
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="text">Book Name<span class="requiredField red">*</span></label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Book Name" v-model="form.name"
                                                    name="name" >
                                                    <!-- <has-error :form="form" field="org_name"></has-error> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="text">Version<span class="requiredField red">*</span></label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Version" v-model="form.version"
                                                    name="version" >
                                                    <!-- <has-error :form="form" field="owner_name"></has-error> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="text">Price<span class="requiredField red">*</span></label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Price" v-model="form.price"
                                                    name="price" >
                                                    <!-- <has-error :form="form" field="present_address"></has-error> -->
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Price<span class="requiredField red">*</span></label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Present Address" v-model="form.present_address"
                                                    name="present_address" :class="{ 'is-invalid': form.errors.has('present_address') }">
                                                    <has-error :form="form" field="present_address"></has-error>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="text">Publication<span class="requiredField red">*</span></label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Publication" v-model="form.publication"
                                                    name="publication" >
                                                    <!-- <has-error :form="form" field="org_name"></has-error> -->
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                              <div class="form-group">
                                                    <div v-if="success != ''" class="alert alert-success" role="alert">
                                                    {{success}}
                                                    </div>
                                                    <!-- <form @submit="formSubmit" enctype="multipart/form-data"> -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="text">Image<span class="requiredField red">*</span></label>
                                                                <input type="file" class="form-control" v-on:change="onImageChange">
                                                            </div>
                                                            <!-- <div class="col-md-6">
                                                                 <label>&nbsp;</label>
                                                                <button class="btn btn-success form-control"><b>Add Image</b></button>
                                                            </div> -->
                                                        </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Price<span class="requiredField red">*</span></label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Price" v-model="form.price"
                                                    name="price" >
                                                    <has-error :form="form" field="present_address"></has-error>
                                                </div>
                                            </div> -->
                                        </div>
                                        <hr>
                                        <h4 class="text-center"><b><i class="ft-save"></i> Book Info</b></h4>
                                        <hr>

                                        <div class="col-md-12">
                                            <div class="row text">
                                                <div class="col-md-4">
                                                    <label class="text">Author Name<span class="requiredField red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <multiselect
                                                    v-model="form.book_info.author_name"
                                                    :options="author"
                                                    :multiple="false"
                                                    label="name"
                                                    track-by="id" />
                                                </div>
                                                <div class="col-md-1">
                                                    <button @click="newModalAuthor" type="button" class="btn btn-primary">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="addNewA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addNew">Add New</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form @submit.prevent="createAuthor()">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <input v-model="form.author.name" type="text" name="name"
                                                                            placeholder="Name"
                                                                            class="form-control">
                                                                        <!-- <has-error :form="form" field="first_name"></has-error> -->
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="row text">
                                                <div class="col-md-4">
                                                    <label class="text">Faculty Name<span class="requiredField red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <multiselect
                                                    v-model="form.book_info.faculty_name"
                                                    :options="faculty"
                                                    label="name"
                                                    track-by="id" />
                                                </div>
                                                <div class="col-md-1">
                                                    <button @click="newModalFaculty" type="button" class="btn btn-primary">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                                 <!-- Modal -->
                                                <div class="modal fade" id="addNewF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addNew">Add New</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form @submit.prevent="createFaculty()">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <input v-model="form.faculty.name" type="text" name="name"
                                                                            placeholder="Name"
                                                                            class="form-control">
                                                                        <!-- <has-error :form="form" field="first_name"></has-error> -->
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="row text">
                                                <div class="col-md-4">
                                                    <label class="text">Course Name<span class="requiredField red">*</span></label>
                                                 </div>
                                                <div class="col-md-6">
                                                    <multiselect
                                                    v-model="form.book_info.course_name"
                                                    :options="course"
                                                    label="name"
                                                    track-by="id" />
                                                </div>
                                                <div class="col-md-1">
                                                    <button @click="newModalCourse" type="button" class="btn btn-primary">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                                 <!-- Modal -->
                                                <div class="modal fade" id="addNewC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addNew">Add New</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form @submit.prevent="createCourse()">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <input v-model="form.course.name" type="text" name="name"
                                                                            placeholder="Name"
                                                                            class="form-control">
                                                                        <!-- <has-error :form="form" field="first_name"></has-error> -->
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <multiselect
                                                                        v-model="form.course.faculty_name"
                                                                        :options="faculty"
                                                                        label="name"
                                                                        track-by="id" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <multiselect
                                                                        v-model="form.course.department_name"
                                                                        :options="department"
                                                                        label="name"
                                                                        track-by="id" />
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="row text">
                                                <div class="col-md-4">
                                                    <label class="text">Department Name<span class="requiredField red">*</span></label>
                                                 </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <multiselect
                                                        v-model="form.book_info.department_name"
                                                        :options="department"
                                                        label="name"
                                                        track-by="id" />
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <button @click="newModalDepartment" type="button" class="btn btn-primary">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                                 <!-- Modal -->
                                                <div class="modal fade" id="addNewD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addNew">Add New</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form @submit.prevent="createDepartment()">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <input v-model="form.department.name" type="text" name="name"
                                                                            placeholder="Name"
                                                                            class="form-control">
                                                                        <!-- <has-error :form="form" field="first_name"></has-error> -->
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                        <div class="form-footer text-center">
                                            <button type="submit" class="btn btn-success btn-min-width mr-1 mb-1" style="margin-top:25px"><i class="fa fa-pencil-square-o"></i> <b>Add Book</b></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                form: {
                    name:'',
                    version:'',
                    price:'',
                    image:null,
                    publication:'',
                    book_info:{
                        author_name:'',
                        faculty_name:'',
                        course_name:'',
                        department_name:'',
                    },
                    author:{
                        name:''
                    },
                    faculty:{
                        name:''
                    },
                    course:{
                        name:'',
                        faculty_name:'',
                        department_name:'',
                    },
                    department:{
                        name:''
                    },
                },
                success: '',
                image:null,
                timer:'',
            }
        },
        methods:{
            newModalAuthor(){
                $('#addNewA').modal('show')
            },
            createAuthor(){
                this.$Progress.start();
                axios.post('/author',this.form.author)
                .then(() => {
                    Fire.$emit('afterCreate');
                    $('#addNewA').modal('hide')
                    toast.fire({
                        type: 'success',
                        title: 'Created successfully'
                        });
                    }).catch( () => {
                })
                this.$Progress.finish();
            },
            newModalFaculty(){
                $('#addNewF').modal('show')
            },
            createFaculty(){
                  axios.post('/faculty',this.form.faculty)
                 .then(() => {
                    this.$Progress.start();
                    Fire.$emit('afterCreate');
                    $('#addNewF').modal('hide')
                    toast.fire({
                        type: 'success',
                        title: 'Created successfully'
                        });
                    this.$Progress.finish();
                    }).catch( () => {
                })
            },
            newModalCourse(){
                $('#addNewC').modal('show')
            },
            createCourse(){
                  axios.post('/course',this.form.course)
                 .then(() => {
                    this.$Progress.start();
                    Fire.$emit('afterCreate');
                    $('#addNewC').modal('hide')
                    toast.fire({
                        type: 'success',
                        title: 'Created successfully'
                        });
                    this.$Progress.finish();
                    }).catch( () => {
                })
            },
            newModalDepartment(){
                $('#addNewD').modal('show')
            },
            createDepartment(){
                  axios.post('/department',this.form.department)
                 .then(() => {
                    this.$Progress.start();
                    Fire.$emit('afterCreate');
                    $('#addNewD').modal('hide')
                    toast.fire({
                        type: 'success',
                        title: 'Created successfully'
                        });
                    this.$Progress.finish();
                }).catch( () => {
                })
            },
            onImageChange(e){
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            store(e){
                let formData = new FormData();
                formData.append('image', this.image);
                formData.append('name', this.form.name);
                formData.append('version', this.form.version);
                formData.append('price', this.form.price);
                formData.append('publication', this.form.publication);
                formData.append('author_id', this.form.book_info.author_name.id);
                formData.append('faculty_id', this.form.book_info.faculty_name.id);
                formData.append('course_id', this.form.book_info.course_name.id);
                formData.append('department_id', this.form.book_info.department_name.id);
                axios.post('/addbook',formData)
                 .then( () => {
                    this.$Progress.start();
                    Fire.$emit('BookCreate');
                    toast.fire({
                        type: 'success',
                        title: 'Book Added successfully'
                        });
                        this.$form.reset();
                    this.$Progress.finish();
                })
                .catch( () => {
                    // this.output = error;
                })
            },
        },
        created(){
            Fire.$on('BookCreate',() => {
                console.log('BookCreate.')

           });
        },
        mounted() {
            this.$Progress.finish()
            console.log('Component mounted.')
        }
    }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css">
</style>
