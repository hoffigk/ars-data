/**
 * Access all ProductWorkflowItem by identifier.
 */
function(doc)
{
    if (doc.type && 'ProductWorkflowItem' === doc.type)
    {
        emit(doc._id, doc);
    }
}
