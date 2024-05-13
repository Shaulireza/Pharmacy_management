import { createRouter, createWebHistory } from 'vue-router'
// import HomeView from '../views/HomeView.vue'
import Dashboard from '@/views/adminpanel/Dashboard.vue'
import ListofCategory from '@/components/include/ListofCategory.vue'
import Content from '@/components/include/Content.vue'
import Medicine from '@/components/include/Medicine.vue'
import CompanyList from '@/components/include/CompanyList.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    // {
    //   path: '/',
    //   name: 'home',
    //   component: HomeView
    // },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: Dashboard,
      children:[
        {
          path:'/categorylist',
          name:'categorylist',
          component:ListofCategory
        },
        {
          path:'/content',
          name:'content',
          component:Content
        },
        {
          path:'/medicine',
          name:'medicine',
          component:Medicine
        },
        {
          path:'/company',
          name:'company',
          component:CompanyList
        },
        
       
      ]
    },
   
  ]
})

export default router
