# calapi

## SAMPLE
### [by date](http://kinenbiapi.herokuapp.com/sample/date.php "day")
### [by freeword](http://kinenbiapi.herokuapp.com/sample/freeword.php "freeword")

## ENDPOINT
http://kinenbiapi.herokuapp.com

## method
POST
## PARAMETER
### by date
<dl>
  <dt>mode</dt>
  <dd>date</dd>
  <dt>month</dt>
  <dd>1 - 12</dd>
  <dt>day</dt>
  <dd>1 - 31</dd>
</dl>

###by freeword
<dl>
  <dt>mode</dt>
  <dd>freeword</dd>
  <dt>keyword</dt>
  <dd>text</dd>
  <dt>search_key</dt>
  <dd> 0 ( or ) / 1 ( and )</dd>
</dl>

## EXAMPLE

```

    <?php
    $data = http_build_query($post_data, "", "&");

    //header
    $header = array(
        "Content-Type: application/x-www-form-urlencoded",
        "Content-Length: " . strlen($data)
    );

    $context = array(
        "http" => array(
            "method" => "POST",
            "header" => implode("\r\n", $header),
            "content" => $data
        )
    );

    $url = "http://kinenbiapi.herokuapp.com/";
    $result = file_get_contents($url, false, stream_context_create($context));

    $result_decoded = json_decode($result,true);

    $this->assertEquals($assertion,count($result_decoded['result']));

```
