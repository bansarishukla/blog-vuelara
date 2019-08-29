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
                    <textarea type="text" v-model="formData.description" class="form-control" rows="5"></textarea>
                </div>
                <!-- <div class="dropdown">
                        <label>Select Category</label>
                        <select v-model="formData.category_id" class="form-control btn btn-default">
                            <option v-for="(category,index) in categoryList" :key="index" :value="category.id">{{ category.category }}</option>
                        </select>
                    </div> -->
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
            cat: {
                category: '',
            },
            formData: {
                name: '',
                description: '',
                // category_id: ''
            }
        }
    },
    mounted () {
        if(this.post)
        {
            this.formData.name = this.post.name;
            this.formData.description = this.post.description;
            // this.cat.category = this.post.category;
        }
    },
    methods: {
        async fetchData (id) {
            let res = await axios.get('/adminhome/' + this.$route.params.id + '/edit')
            if (res.data) {
               this.formData.name = res.data.PostData.name
               this.formData.description = res.data.PostData.description
            //    this.cat.category = res.data.PostData.category
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

