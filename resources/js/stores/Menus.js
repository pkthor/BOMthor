import { defineStore } from 'pinia'

export const useMenuStore = defineStore({
  id: 'menu-store',
  state: () => ({ isMenuOpen: false }),
  getters: {},
  actions: {}
})