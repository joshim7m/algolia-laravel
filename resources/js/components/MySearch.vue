<template>
  <ais-instant-search
    :search-client="searchClient"
    index-name="posts">
    
    <ais-search-box placeholder="Search contacts..."></ais-search-box>
 

<ais-hits>
  <template
    slot="item"
    slot-scope="{ item }"
  >
    <h4>
      <ais-highlight
        :hit="item"
        attribute="title"
      />
    </h4>
    <p>
      <ais-highlight
        :hit="item"
        attribute="content"
      /> -
    </p>

  </template>
</ais-hits>




  </ais-instant-search>
</template>

<script>
import algoliasearch from 'algoliasearch/lite';

export default {
  data() {
    return {
      searchClient: algoliasearch(
        process.env.MIX_ALGOLIA_APP_ID,
        process.env.MIX_ALGOLIA_SEARCH
      ),
    };
  },
};
</script>