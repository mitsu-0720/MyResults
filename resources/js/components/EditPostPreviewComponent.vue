<template>
      <div class="col-md-6">
          <img v-if="data.image" :src="data.image" width="100%" class="mt-2">
          <img v-else :src="postPath" width="100%" class="mt-2">
          <label for="path" class="col-form-label text-center label-pic mt-3"><i class="fas fa-camera fs-16 mr-2"></i>画像変更</label>
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
