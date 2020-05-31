<template>
    <div class="medicine">
        <div class="row">

            <div class="col-lg-4">
                <div class="card-box">
                    <h4 class="text-dark header-title m-t-0 m-b-30">Add Category</h4>

                    <div class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" v-model="name" class="form-control" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-9 text-right">
                                <button type="button" @click="Addcategory" class="btn btn-primary btn-rounded waves-effect waves-light">ADD</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="card-box">
                    <h4 class="text-dark header-title m-t-0">Category Table</h4>
                    <div class="text-center">
                        <ul class="list-inline chart-detail-list">
                            <li>
                                <h5>{{successAlert}}</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="card-box table-responsive">
                        <div class="table-responsive " >
                            <table class="table table-hover table-striped scrollspy-example" data-spy="scroll" data-offset="0">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(data,index) in allcategory" >
                                    <th scope="row">{{index+1}}</th>
                                    <td>{{data.name}}</td>
                                    <td>
                                        <a href=""><span class="badge badge-primary"><i class="ion-compose"></i></span></a>
                                        <a class=" waves-effect waves-light" href="javascript:;" @click="deleteconfirm(data.id)"><span class="badge badge-danger"><i class="fa fa-trash"></i></span></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CategoryComponet",
        data(){
            return{
                name:'',
                allcategory:[],
                successAlert:'',
            }
        },
        mounted() {
            this.getData()
         },
        methods:{
            Addcategory(){
                axios.post('/admin/category/add', {
                    name: this.name,
                })
                    .then((response)=>{

                        this.allcategory=this.getData();
                        console.log(response.data)
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            getData(){
                axios.get('/admin/data/get/category')
                    .then((response)=>{
                        // handle success
                        this.allcategory=response.data.Categoryget;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            },
            deleteconfirm(id){
                axios.get('/admin/category/delete/'+id)
                    .then((response)=>{
                        this.successAlert=response.data.SuccessDelete;
                        this.allcategory=this.getData();
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });
            },
        }
    }
</script>

<style scoped>

</style>
