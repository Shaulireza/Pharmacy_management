<template>
  <div class="col-12">
        <div class="bg-light rounded h-100 p-4 vh-100">
            <h6 class="mb-4">Product List</h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(c, i) in categorylist" :key="i">
                            <th scope="row">{{ i + 1 }}</th>
                            <td>{{ c.name }}</td>
                            <td>
                                <button @click="editcate(c.id)" class="btn btn-success btn-sm">Edit</button>
                                <button @click="deleteCategory(c.id)" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</template>