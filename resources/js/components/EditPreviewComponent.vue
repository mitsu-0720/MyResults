<template>
      <div class="col-md-6">
          <img v-if="data.image" :src="data.image" width="60px" height="60px" class="mt-2 circle">
          <img v-else :src="postPath" width="60px" height="60px" class="mt-2 circle">
          <label for="path" class="col-form-label text-center label-pic mt-3">画像変更</label>
          <input id="path" name="path" type="file" ref="file" @change="setImage"/>
      </div>
</template>

<script>
export default {
  props:{
    postPath: {type: String},
  },
  data() {
    return {
      data: {
        image: '',
        name: "",
      }
    }
  },
  methods: {
    setImage(e) {
      const files = this.$refs.file;
      const fileImg = files.files[0];
      if (fileImg.type.startsWith("image/")) {
        this.data.image = window.URL.createObjectURL(fileImg);
        this.data.name = fileImg.name;
        this.data.type = fileImg.type;
      }
    },

  }
};
</script>
