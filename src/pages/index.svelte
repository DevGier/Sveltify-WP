<script>
  import { metatags } from '@roxi/routify'
  import { query } from 'svelte-apollo'
  import { gql } from '@apollo/client/core'

  metatags.title = 'My Svelte WordPress website'
  metatags.description = 'This is an example description'

  const urlParams = new URLSearchParams(window.location.search)
  const isPreview = urlParams.has('preview') ?? false

  const PAGE = gql`
    query Page($asPreview: Boolean) {
      post(id: "/", idType: URI, asPreview: $asPreview) {
        id
        content
        isPreview
      }
    }
  `

  const page = query(PAGE, {
    variables: { isPreview },
  })
</script>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Welcome to Sveltify</h1>
      <p>A simple WordPress theme made with Svelte.</p>

      {#if $page.loading}
        Loading...
      {:else if $page.error}
        Error: {$page.error.message}
      {:else if $page.data}
        {@html $page.data.post.content}
      {/if}
    </div>
  </div>
</div>
