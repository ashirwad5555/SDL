require 'sinatra'

def reversed_name(first_name, last_name)
    "#{last_name} #{first_name}"
end


get '/' do
    erb :index
    end

post '/reverse' do
    first_name = params['first_name']
    last_name = params['last_name']
    @reversed_name = reversed_name(first_name, last_name)
    erb :reverse
    end



