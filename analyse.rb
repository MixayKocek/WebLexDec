#!/usr/bin/env ruby

simpa=["item1type", "item2type", "item3type", "item4type", "item5type"]
trada=["traditem1type", "traditem2type", "traditem3type", "traditem4type", "traditem5type"]

if ARGV[0] == "-t"
    ar=trada
elsif ARGV[0] == "-s"
    ar=simpa
else
    raise "Invalid params"
end

i = 0
starttime = 0
File.open(ARGV[1]).each do |line|
    time, type, rest = line.split(':')
    if type==" item"
        starttime = time.to_i
    elsif type.match(/^ pressed ([FJ])\r?$/)
        interval = time.to_i-starttime
        puts "#{ar[i/2]} #{interval} #{$~[1]}"
        i += 1
    end
end
