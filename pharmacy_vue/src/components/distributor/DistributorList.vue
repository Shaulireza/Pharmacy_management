<template>
     <div class="col-12">
          <div class="bg-light rounded h-100 p-4 vh-100">
              <h6 class="mb-4">Product List</h6>
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Sl</th>
                              <th scope="col">Medicine Name</th>
                              <th scope="col">Company Name</th>
                              <th scope="col">Category Name</th>
                              <th scope="col">Unit</th>
                              <th scope="col">Company Price</th>
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Expire Date</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr v-for="(p, i) in " :key="i">
                              <th scope="row">{{ i + 1 }}</th>
                              <td>{{ p.name }}</td>
                              <td>{{ p.company.name }}</td>
                              <td>{{ p.category.name }}</td>
                              <td>{{ p.unit.name }}</td>
                              <td>{{ p.company_price }}</td>
                              <td>{{ p.price }}</td>
                              <td>{{ p.quantity }}</td>
                              <td>{{ p.expire_date }}</td>
                              <td>{{ p.status }}</td>
                              <td>
                                  <button @click="(p.id)" class="btn btn-success btn-sm">Edit</button>
                                  <button @click="(p.id)" class="btn btn-danger btn-sm">Delete</button>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
</template>