<template>
  <b-container fluid role="main" tag="main">
    <h1 class="mb-4">Impressum</h1>
    <div class="d-inline-flex">
      <table class="table table-sm">
        <tbody>
          <tr>
            <th></th>
            <td>Tom Meyers</td>
          </tr>
          <tr>
            <th>E-Mail</th>
            <td><a href="mailto:tom@odex.be">tom@odex.be</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </b-container>
</template>

<script>
export default {
  name: "Impressum",
  metaInfo: {
    title: "Impressum",
    meta: [{ vmid: "robots", name: "robots", content: "noindex" }]
  }
};
</script>
