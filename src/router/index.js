import { createRouter, createWebHistory } from 'vue-router'
import { HomeView,BlogView,ShowBlogView,PostView } from '@/views'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/blog',
      name: 'blog',
      component: BlogView
    },
    {
      path: '/blog/:id',
      name: 'showBlog',
      component: ShowBlogView
    },
    {
      path: '/posts',
      name: 'posts',
      component: PostView
    },
  ]
})

export default router

