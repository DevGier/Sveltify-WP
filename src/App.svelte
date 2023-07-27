<script>
  import { Router } from '@roxi/routify'
  import { routes } from '../.routify/routes'

  import {
    ApolloClient,
    InMemoryCache,
    createHttpLink,
  } from '@apollo/client/core'
  import { setClient } from 'svelte-apollo'

  const link = createHttpLink({
    uri: '/graphql',
    credentials: 'same-origin',
  })

  const client = new ApolloClient({
    cache: new InMemoryCache(),
    link,
  })

  setClient(client)
</script>

<Router {routes} />
