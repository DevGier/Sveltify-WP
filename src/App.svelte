<script>
  import { Router } from '@roxi/routify'
  import { routes } from '../.routify/routes'

  import { ApolloClient, InMemoryCache } from '@apollo/client/core'
  import { setClient } from 'svelte-apollo'

  const client = new ApolloClient({
    uri: window.graphql_url,
    cache: new InMemoryCache(),
  })
  setClient(client)
</script>

<Router {routes} />
