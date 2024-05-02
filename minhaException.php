<?php

class MinhaException extends Exception{
  public function exbibeVinicius()
{
    echo 'Vinicius';
}
}

throw new minhaException();