define ars-data::application (
  $app_name = $title,
  $app_docroot = '/home/vagrant/projects/ars-data/applications/cms/honeybee/pub'
) {

  nginx::site { "${app_name}":
    name => $app_name,
    docroot => "${app_docroot}"
  }

  file {
    "/home/vagrant/init_fe.sh":
      ensure  => present,
      mode    => '0744',
      owner   => 'vagrant',
      group   => 'vagrant',
      content => template('ars-data/init_fe.sh.erb');
    "/home/vagrant/init_cms.sh":
      ensure  => present,
      mode    => '0744',
      owner   => 'vagrant',
      group   => 'vagrant',
      content => template('ars-data/init_cms.sh.erb')
  }
}