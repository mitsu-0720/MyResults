<template>
  <div>
    <a class="nav-link" @click="openModal">ゲストログイン</a>
    <div class="overlay" @click="closeModal" v-if="showContent">
      <div class="dialog" @click="stopEvent">
        <p class="borderbottom pt-2 pb-4">ゲストユーザーとしてこのサイトをお試しになれます</p>
        <p class="text-right pr-2">
          <a @click="closeModal" class="mr-4 black">キャンセル</a>
          <a href="/login/guest" class="ml-auto">ログイン</a>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
   export default {
     data() {
       return {
         showContent: false
       }
     },

     methods:{
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
