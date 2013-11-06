<?php

class Product_Export_ExportSuccessView extends ProductBaseView
{
    public function executeConsole(\AgaviRequestDataHolder $request_data)
    {
        return "Finished exporting Product documents." . PHP_EOL;
    }
}
