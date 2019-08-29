<template>
    <div class='row'>
        <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h1>My Posts</h1>
            </div>
        </div>
        <div class="card-body">
                <form @submit.prevent="createPost">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="formData.name">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" v-model="formData.description" rows="6"></textarea>
                    </div>
                    <div class="dropdown">
                        <label>Select Category</label>
                        <select v-model="formData.category_id" class="form-control btn btn-default">
                            <option v-for="(category,index) in categoryList" :key="index" :value="category.id">{{ category.category }}</option>
                        </select>
                    </div>
                    <div style="text-align: center">
                        <button data-inline="true" type="submit" class="btn btn-primary">Add post</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <h4>All Tasks</h4>
                <ul class="list-group">
                    <p class="no-post" v-if='list.length === 0'>There are no tasks yet!</p>
                    <li class="list-group-item" v-for="(formData, index) in list" :key="index">
                        <h3>{{ formData.name}}</h3>
                        <h5>{{ formData.description }}</h5>
                        <hr>
                        <div>
                            <a :href="'/adminhome/'+formData.id+'/edit'" class="btn btn-success btn-xs">Edit</a>
                            <button @click="deletePost(formData.id,index)" class="btn btn-danger btn-xs">Delete</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        postData: {
            type: Array,
            required: true
        },
    },
    data() {
        return {
            selectedCategories: 0,
            list: [],
            categoryList: [],
            isEdit: false,
            currentID: null,
            formData: {
                name: '',
                description: '',
                category_id: ''
            }
        };
    },
    mounted() {
        console.log('mounted');
        if(this.postData) {
            this.list = this.postData
            this.fetchCategory()
        }
    },
    methods: {
        async fetchCategory () {
            let res = await axios.get('/category')
            if (res.data) {
                this.categoryList = res.data.categories
            }
        },
        async createPost() {
                let data = {
                    name: this.formData.name,
                    description: this.formData.description,
                    category_id: this.formData.category_id,
                }
                console.log(data);
                axios.post('/adminhome', data)
                    .then((res) => {
                        this.formData.name = '';
                        this.formData.description = '';
                        this.formData.category_id = '';
                        this.list.push(res.data.formData)
                    })
                    .catch((err) => console.error(err));
        },
        deletePost(id,index) {
            axios.delete('adminhome/' +id)
                .then((res) => {
                    this.list.splice(index,1)
                })
                .catch((err) => console.error(err));
        },
    }
};
</script>
<style >
  .card {
    width: 100%;
  }
  .btn {
      border: 1px solid #488AC7;
  }
  .dropdown {
      width: 20%;
      margin-bottom: 15px;
  }
</style>
