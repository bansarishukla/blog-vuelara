<template>
    <div class="card">
        <div class="card-header">
            <h1>Edit Posts</h1>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="">Post Title</label>
                    <input type="text" v-model="formData.name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Post Description</label>
                    <textarea type="text" v-model="formData.description" class="form-control"></textarea>
                </div>
                <div style="text-align: center">
                    <button data-inline="true" type="submit" class="btn btn-primary" @click="updatePost">Update</button>
                </div>
            </form>
        </div>
    </div>
 </template>
 <script>
 export default {
    props:{
        post:{
            type:Object,
            required:true
        }
    },
    data () {
        return {
            list:[],
            formData: {
                name: '',
                description: ''
            }
        }
    },
    mounted () {
        if(this.post)
        {
            this.formData.name = this.post.name;
            this.formData.description = this.post.description;
        }
    },
    methods: {
        async fetchData (id) {
            let res = await axios.get('/adminhome/' + this.$route.params.id + '/edit')
            if (res.data) {
               this.formData.name = res.data.PostData.name
               this.formData.description = res.data.PostData.description
            }
        },
        async updatePost (id) {
            let data = {
                name: this.formData.name,
                description: this.formData.description,
            }
            let res = await axios.put('/adminhome/' + this.post.id, this.formData)
                .then((res) => {
                    this.formData.name = '';
                    this.formData.description = '';
                    this.list.push(res.data.formData)
                })
                .catch((err) => console.error(err));
        }
    }
 }
 </script>
 <style>
    .go_back {
        font-size: 30px;
        text-align: center;
        list-style: none;
        text-decoration: underline;
        margin-bottom: 30px;
    }
 </style>
