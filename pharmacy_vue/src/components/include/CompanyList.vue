<template>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4"> Add Company Name</h6>

                    <div class="mb-3">
                        <label for="CompanyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="CompanyName" v-model="name"
                            aria-describedby="emailHelp">
                    </div>
                    <button v-if="id == 0" @click="save" class="btn btn-primary">Save</button>
                    <button v-else @click="updatecom" class="btn btn-primary">Update</button>

                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4 vh-100">
            <h6 class="mb-4">Category List</h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(c, i) in companylist" :key="i">
                            <th scope="row">{{ i + 1 }}</th>
                            <td>{{ c.name }}</td>
                            <td>
                                <button @click="editcom(c.id)" class="btn btn-success btn-sm">Edit</button>
                                <button @click="deleteCompany(c.id)" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        return {
           companylist: [],
            name: '',
            id: 0,
        }
    },
    methods: {
       getcompany() {
            axios.get("http://127.0.0.1:8000/api/company")
                .then((res) => {
                    this.companylist = res.data.data
                    console.log(res.data.data)
                })
        },
        save() {
            axios.post("http://127.0.0.1:8000/api/company", { name: this.name })
                .then((res) => {
                    this.name
                    this.getcompany()
                    this.name = ""
                    this.id = ""
                    console.log(res.data.data)
                });
        },
        deleteCompany(id) {
            axios.delete('http://127.0.0.1:8000/api/company/' + id)
                .then(() => {
                    this.getcompany();
                })
                .catch((error) => {
                    console.error('Error deleting Company:', error);
                });
        },
        editcom(id){
            this.id = id
            axios.get('http://127.0.0.1:8000/api/company/' + id + '/edit')
            .then((res)=>{
                const c = res.data.data
                this.name = c.name
                this.getcompany()
            });
        },
        updatecom(){
            axios.put('http://127.0.0.1:8000/api/company/' + this.id, {name:this.name})
            .then((res)=>{
                console.log
                this.id = 0;
                this.name= "";
                this.getcompany();
            })
        }
    },
    mounted() {
        this.getcompany()
    }
}
</script>