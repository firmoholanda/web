require 'sinatra'
require 'sinatra/reloader'


get "/" do
	erb :about
end

get "/services" do
	erb :services
end

get "/clients" do
	erb :clients
end

get "/contact" do
    erb :contact
end