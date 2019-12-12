Nova.booting((Vue, router, store) => {
  Vue.component('index-BelongsToWithCreate', require('./components/BelongsToWithCreate/IndexField'))
  Vue.component('detail-BelongsToWithCreate', require('./components/BelongsToWithCreate/DetailField'))
  Vue.component('form-BelongsToWithCreate', require('./components/BelongsToWithCreate/FormField'))
})
