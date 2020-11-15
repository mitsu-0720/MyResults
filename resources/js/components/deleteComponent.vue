<template>
    <a href="#" class="dropdown-item" @click="del">削除</a>
</template>

<script>
  export default {
  // props:['postId'],
    //  data() {
    //    return {
    //      showContent: false
    //    }
    //  },

     methods:{
      del() {
        confirm('この記事を削除しますか？')
      },
      stopEvent(){
        event.stopPropagation()
      },
      // clickEvent: function(){
      //   this.$emit('from-child')
      // },
      openModal(){
        this.showContent = true
      },
      closeModal(){
        this.showContent = false
      }
    }
  }
</script>
