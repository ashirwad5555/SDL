require 'mail';


#setting the smtp
Mail.defaults do
delivery_method :smtp, {
    :address => 'smtp.gmail.com',
    :port => 587,
    :user_name => 'ashirwadkatkamwar@gmail.com',
    :password => 'tkgg ksco ohkt sikk',
    :authentication => :login,
    :enable_starttls_auto => true,
}
end

message = Mail.new do 
from 'ashirwadkatkamwar@gmail.com'
to 'ashirwad.katkamwar22@pccoepune.org'
subject 'testing ruby skills'
body 'body of testing ruby skills'
end

message.deliver!