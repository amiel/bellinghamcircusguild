
guard 'remote-sync',
        :source => ".",
        :destination => '/home/bhamcircus/bellinghamcircusguild.com/wp-content/themes/bcg-theme/',
        :user => 'bhamcircus',
        :remote_address => 'bellinghamcircusguild.com',
        :verbose => true,
        :cli => "--color",
        :sync_on_start => true do

  watch(%r{^.+\.(js|php|css|png|gif|jpg)$})
end
