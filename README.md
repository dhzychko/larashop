Basic API
.....

Better API

Real Estate api

entities:

    Realtor (has many Properties)
        fields:
            name
            email

    Property (house, condominium or apartment, has many Neighborhoods) 
        fields:
            name
            type (H,h, C,c A,a)
            address
            square (m2, number)
            realtor (foreign Realtor id)
            neighborhood (foreign Neighborhood id)

    Neighbourhood (district, has many Properties ) 
        fields:
            name

    NeighbourhoodProperty (pivot describes many to many relationship ) 
        fields:
            neighbourhood_id
            property_id


CRUD for Properties:
    show all properties
    show single property
    add property
    edit property (ID)
    delete property
