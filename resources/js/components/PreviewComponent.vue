<template>
      <div class="col-md-6 text-center">
          <label for="path" class="col-form-label text-center label-pic">ファイルを選択</label>
          <input id="path" name="path" type="file" ref="file" @change="setImage"/>
          <img :src="data.image" width="100%" class="mt-2">
      </div>
</template>

<script>
export default {
  data() {
    return {
      data: {
        image: "/storage/dummy.png",
        name: "",
      }
    };
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
