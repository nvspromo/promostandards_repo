<?php
class MySoapServer {
    public function getInventoryLevels($request) {
        return [
            'Inventory' => [
                'productId' => 'STUB-PRODUCT',
                'PartInventoryArray' => [
                    [
                        'partId' => 'STUB-PART',
                        'mainPart' => true,
                        'quantityAvailable' => ['value' => 100, 'uom' => 'EA'],
                        'InventoryLocationArray' => [
                            [
                                'inventoryLocationId' => 'LOC1',
                                'inventoryLocationName' => 'Warehouse A',
                                'postalCode' => '92627',
                                'country' => 'US',
                                'inventoryLocationQuantity' => ['value' => 100, 'uom' => 'EA']
                            ]
                        ]
                    ]
                ]
            ],
            'ServiceMessage' => [
                'code' => 100,
                'description' => 'Stubbed response',
                'severity' => 'Information'
            ]
        ];
    }

    public function getFilterValues($request) {
        return [
            'FilterValues' => [
                'productId' => 'STUB-PRODUCT',
                'Filter' => [
                    'partIdArray' => ['STUB-PART'],
                    'LabelSizeArray' => ['M', 'L'],
                    'PartColorArray' => ['Black']
                ]
            ],
            'ServiceMessageArray' => [
                [
                    'code' => 100,
                    'description' => 'Stubbed filter response',
                    'severity' => 'Information'
                ]
            ]
        ];
    }
}

$options = ['uri' => 'http://www.promostandards.org/WSDL/Inventory/2.0.0/'];
$server = new SoapServer('InventoryService.wsdl', $options);
$server->setClass('MySoapServer');
$server->handle();
?>
