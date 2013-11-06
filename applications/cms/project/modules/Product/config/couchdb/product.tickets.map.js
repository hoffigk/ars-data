/**
 * Access all ProductWorkflowItem tickets by identifier.
 */
function(doc)
{
    if (doc.type && 'ProductWorkflowItem' === doc.type)
    {
        emit(doc._id, doc.ticket);
    }
}
