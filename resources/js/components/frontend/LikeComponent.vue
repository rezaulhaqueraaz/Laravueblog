<template>
    <div class="laracard-footer">
        <div class="likecom">
            <ul>
                <li @click="Like()" style="cursor: pointer" v-for="getlike in getlikedata">
                    <i v-if="getlike.post_id==id" class="fas fa-heart text-danger"></i>
                </li>
                <li @click="Like()" style="cursor: pointer">
                    <i class="far fa-heart text-danger"></i>
                </li>

            </ul>
            <ul>
                <li><a href=""> <i class="far fa-comments text-dark"></i><span>42</span></a></li>
            </ul>
        </div>
        <div class="wholike">
            <ul>
                <li class="pone"><a href=""><img src="" alt=""></a></li>
                <li class="ptwho"><a href=""><img src="" alt=""></a></li>
                <li class="pthree"><a href=""><img src="" alt=""></a></li>
            </ul>
        </div>
        <div class="likemore">
            <h5>+20 More</h5>
        </div>

    </div>
</template>

<script>
    export default {
        name: "LikeComponent",
        props:[
            'id',
        ],
        data(){
            return{
                LikeError:'',
                getlikedata:[],
            }
        },
        mounted() {
            this.getLikeData();
        },
        methods:{
            Like(){
                axios.post('/frontend/like',{
                    postId: this.id,
                }).then((response)=>{
                    this.getlikedata=this.getLikeData();
                    this.LikeError=response.data.error;
                    console.log(response.data.Success)
                    console.log(response.data.dataDelete)
                    })
                    .catch(function (error) {
                        console.log(error);
                });
            },
            getLikeData(){
                axios.get('get/likeInformation')
                    .then((response)=>{
                        // handle success
                        this.getlikedata=response.data.GetLikeData;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            },


        },
    }
</script>

<style scoped>

</style>
