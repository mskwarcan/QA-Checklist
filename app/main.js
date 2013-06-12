require.config({
  paths: {
    'jquery': 'vendor/jquery/jquery',
  }
});

require(['views/app'], function(AppView) {
  new AppView;
});