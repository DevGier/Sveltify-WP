<script>
  import { metatags } from '@roxi/routify'
  import { query } from 'svelte-apollo'
  import { gql } from '@apollo/client/core'

  metatags.title = 'My Svelte WordPress website'
  metatags.description = 'This is an example description'

  const PAGE = gql`
    query Page {
      post(id: "/", idType: URI) {
        content
      }
    }
  `
  const page = query(PAGE)
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
      {:else if $page}
        {@html $page.data.post.content}
      {/if}
    </div>
  </div>
</div>
