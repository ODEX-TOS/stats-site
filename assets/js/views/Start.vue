<template>
  <b-container fluid role="main" tag="main">
    <b-row>
      <b-col cols="12" xl="9">
        <b-jumbotron class="p-2 p-xl-3">
          <h1>TOS Linux package statistics</h1>
          <p>
            Contributing is as easy as installing the package - a weekly cron
            job will take care of the rest. You will be sending us a list of
            packages installed on your system, along with the architecture and
            mirror you use. This information is anonymous and cannot be used to
            identify you, but it will help us prioritize our efforts and make
            Arch even better.
          </p>
        </b-jumbotron>

        <div>
          <h4>Getting started</h4>
          <ol class="pl-4">
            <li>
              Install pkstats by <code>tos -Syu <strong>pkgstats</strong></code>
            </li>
            <li>
              Ensure the weekly timer is started:
              <code>systemctl start <strong>pkgstats.timer</strong></code>
            </li>
            <li>
              Check the timer status with
              <code>systemctl status <strong>pkgstats.timer</strong></code>
            </li>
            <li>
              For additional help see <code>pkgstats <strong>-h</strong></code>
            </li>
          </ol>
          <h4>Submitting your package data</h4>
          <pre
            class="text-light bg-dark p-2 ml-4"
          ><code><strong>$ pkgstats</strong>
Collecting data...
Submitting data...
Thanks for your submission. :-)
See results at https://stats.odex.be/</code></pre>
          <h4>Gathering statistics</h4>
          <ul class="pl-4">
            <li>
              Browse the
              <router-link :to="{ name: 'packages' }"
                >package statistics</router-link
              >
              and lookup the popularity of packages.
            </li>
            <li>
              See some
              <router-link :to="{ name: 'fun' }">fun statistics</router-link>
              and see which packages are the most popular in their category.
            </li>
            <li>
              Use the
              <router-link :to="{ name: 'api-doc' }">API</router-link>
              to write your own clients:
              <pre
                class="text-light bg-dark p-2"
              ><code><strong>$ curl -s 'https://stats.odex.be/api/packages/php' | jq</strong>
{
  "name": "php",
  "samples": 24,
  "count": 3,
  "popularity": 12.50
}</code></pre>
            </li>
          </ul>
        </div>
      </b-col>

      <b-col cols="12" xl="3">
        <h4>Documentation</h4>
        <ul class="pl-4">
          <li>See <code>pkgstats -h</code></li>
          <li><a href="https://wiki.odex.be" rel="nofollow">TOS Wiki</a></li>
          <li>
            <router-link :to="{ name: 'api-doc' }"
              >pkgstats server API documentation</router-link
            >
          </li>
        </ul>

        <h4>Development</h4>
        <ul class="pl-4">
          <li>
            <a href="https://github.com/ODEX-TOS/pkgstats-cli" rel="nofollow">
              pkgstats cli</a
            >
          </li>
          <li>
            <a href="https://github.com/ODEX-TOS/stats.odex.be" rel="nofollow">
              pkgstats server</a
            >
          </li>
        </ul>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
export default {
  name: "Start",
  metaInfo: { title: "TOS Linux package statistics" }
};
</script>
