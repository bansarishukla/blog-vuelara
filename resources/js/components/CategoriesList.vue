<template>
    <div>
        <div class="card-body">
            <form @submit.prevent="createCategories">
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" v-model="formData.category">
                </div>
                <button type="submit" class="btn btn-primary">Add categories</button>
            </form>
        </div>
        <div class="card-footer">
            <h4>All categories</h4>
            <ul class="list-group">
                <p v-if="list.length === 0">There is no categories yet!</p>
                <li class="list-group-item" v-for="(formData, index) in list" :key="index">
                    {{ formData.category }}
                    <div style="text-align: right">
                        <button data-inline="true" @click="deleteCategory(formData.id,index)" class="btn btn-danger btn-xs">Delete</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        categoriesData: {
            type: Array,
            required: true
        },
    },
    data() {
        return {
            list: [],
            formData: {
                category: ''
            }
        };
    },
    mounted() {
        console.log('mounted');
        if(this.categoriesData) {
            this.list = this.categoriesData
        }
    },
    methods: {
        async createCategories() {
            if(this.isEdit) {
                let res = await axios.post('category/create/' + this.currentID, this.formData)
                if(res.data) {
                    console.log(res.data)
                }
            }
            else {
                let data = {
                    category: this.formData.category
                }
                console.log(data);
                axios.post('/category',data)
                    .then((res) => {
                        this.formData.category = '';
                        this.list.push(res.data.formData)
                    })
                    .catch((err) => console.error(err));
            }
        },
        deleteCategory(id,index) {
            axios.delete('/category/' +id)
                .then((res) => {
                    this.list.splice(index,1)
                })
                .catch((err) => console.error(err));
        }
    }
};
</script>
