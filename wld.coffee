wordIdx = 0

delay = (ms, func) -> setTimeout func, ms

if window.performance.now
    getTimestamp = -> window.performance.now()
else if window.performance.webkitNow
    getTimestamp = -> window.performance.webkitNow()

log = (msg) ->
    $("textarea").append("#{Math.round(getTimestamp())}: #{msg}\n")
    $("textarea").get(0).scrollTop = $("textarea").get(0).scrollHeight

keydown = (e) ->
        $(".f,.j").css("background-color", "white")
        if e.which == 70
            log "pressed F"
            $(".f").css("background-color", "lightgreen")
            $(document).keydown keydown_log
        else if e.which == 74
            log "pressed J"
            $(".j").css("background-color", "lightgreen")
            $(document).off("keydown")
            $(document).keydown keydown_log
        else
            log "pressed #{e.which}"
        if e.which == 70 or e.which == 74
          wordIdx = wordIdx + 1
          if words[wordIdx]
            showItem($(".word"), words[wordIdx])
          else
            $("#logform").submit()

keydown_log = (e) ->
     log "pressed #{e.which}"
            
showItem = (elem, item) ->
    #[itemtxt, itemhtml] = item
    itemtext = item
    itemhtml = item
    $(".f,.j").css("background-color", "white")
    $(document).off("keydown")
    $(document).keydown keydown
    elem.html(itemhtml)
    log "item: #{itemtext}"

$ ->
    $(document).focus()
    log "name = '#{name}'"
    $(document).off("keydown")
    $(document).keydown keydown_log
    if not getTimestamp
        alert("Your browser is not supported")
        return
    $("textarea").focus ->
        $(@).blur()
    showItem($(".word"), words[wordIdx])
