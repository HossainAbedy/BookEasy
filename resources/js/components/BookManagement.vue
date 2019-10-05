<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form"><b>BookManagement Component</b></h4>
                    </div>
                    <div class="card-body">
                        <form method="POST"  enctype="multipart/form-data" v-on:submit.prevent="update(form.id)">
                            <div class="col-md-12">
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="text">Book Name<span class="requiredField red">*</span></label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Organization Name" v-model="form.org_name"
                                                    name="org_name" >
                                                    <!-- <has-error :form="form" field="org_name"></has-error> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Version<span class="requiredField red">*</span></label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Owner Name" v-model="form.owner_name"
                                                    name="owner_name" >
                                                    <!-- <has-error :form="form" field="owner_name"></has-error> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Price<span class="requiredField red">*</span></label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Present Address" v-model="form.present_address"
                                                    name="present_address" >
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
                                        <hr>
                                        <h4 class="text-center"><b><i class="ft-save"></i> Book Info</b></h4>
                                        <hr>

                                        <div class="col-md-12">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <label class="text">Author Name<span class="requiredField red">*</span></label>
                                                </div>

                                                <div class="col-md-6">
                                                    <multiselect
                                                    v-model="form.book_info.author_name"
                                                    :options="author"
                                                    label="name"
                                                    track-by="id" />
                                                </div>

                                                <div class="col-md-1">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Faculty Name<span class="requiredField red">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <multiselect
                                                    v-model="form.book_info.faculty_name"
                                                    :options="faculty"
                                                    label="name"
                                                    track-by="id" />
                                                </div>
                                                <div class="col-md-1">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Course Name<span class="requiredField red">*</span></label>
                                                    <multiselect
                                                    v-model="form.book_info.course_name"
                                                    :options="course"
                                                    label="name"
                                                    track-by="id" />
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Depertment Name<span class="requiredField red">*</span></label>
                                                    <multiselect
                                                    v-model="form.book_info.department_name"
                                                    :options="department"
                                                    label="name"
                                                    track-by="id" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary btn-min-width mr-1 mb-1 float-right"><i class="fa fa-pencil-square-o"></i> <b>Add</b></button>
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
                    book_info:{
                        author_name:'',
                        faculty_name:'',
                        course_name:'',
                        department_name:'',
                    }
                }
            }
        },

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css">
</style>
