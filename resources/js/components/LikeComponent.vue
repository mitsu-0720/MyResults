<template>
      <button  v-if="!liked" type="button" class="btn" @click="like(postId)"><i class="far fa-heart mr-1"></i>{{ likeCount }}</button>
      <button  v-else type="button" class="btn" @click="unlike(postId)"><i class="fas fa-heart mr-1"></i>{{ likeCount }}</button>
</template>

<script>
    export default {
        props:['postId', 'defaultLiked', 'defaultCount'],
        data() {
          return{
              liked: false,
              likeCount: 0,
          };
        },
        created() {
          this.liked = this.defaultLiked
          this.likeCount = this.defaultCount
        },

        methods: {
          like(postId) {
            let url = `/posts/${postId}/like`

            axios.post(url)
            .then(response => {
                this.liked = true;
                this.likeCount = response.data.likeCount;
            })
            .catch(error => {
              alert(error)
            });
          },
          unlike(postId) {
            let url = `/posts/${postId}/unlike`

            axios.post(url)
            .then(response => {
                this.liked = false;
                this.likeCount = response.data.likeCount;
            })
            .catch(error => {
              alert(error)
            });
          }
        }
    }
</script>
