# ATVMetadataIngestionService

MIS is the authority for ingesting Metadata into the Amazon Video Catalog (AVC).
# Testing

### Unit

```
% brazil-build release
```
### Integration
<span style="color: red">
Run command after following the steps in "Setting up for local Integration Testing."
</span>

```
% brazil-build test-integration-assert-<alpha | beta | gamma>
```

# Setting up for local Integration Testing

1. Set up a local workspace containing [ATVMetadataIngestionService ](https://code.amazon.com/packages/ATVMetadataIngestionService/trees/mainline)
and [ ATVMetadataIngestionServiceClientConfig ](https://code.amazon.com/packages/ATVMetadataIngestionServiceClientConfig/trees/mainline).

2. Add your host class and username to the following Odin Material Sets:
   1. [com.amazon.access.ATVMetadataIngestionService-Beta-service-credentials-1](https://odin.amazon.com/#view/materialSet/com.amazon.access.ATVMetadataIngestionService-Beta-service-credentials-1)
   2. [com.amazon.certificates.atv-mis-ca.integ.amazon.com-STANDARD_SSL_SERVER_INTERNAL_ENDPOINT-RSA-Chain](https://odin.amazon.com/#view/materialSet/com.amazon.certificates.atv-mis-ca.integ.amazon.com-STANDARD_SSL_SERVER_INTERNAL_ENDPOINT-RSA-Chain) <br><br>
3. Create a child environment of [ATVMetadataIngestionService/Global/stages/Beta](https://apollo.amazon.com/environments/ATVMetadataIngestionService/Global/stages/Beta)
by selecting "1-Click [username] child environment" at the top right of the page.

4. Set up your child environment:
  1. Select "Edit this environment" and change "Run as User" to your login. Save.
  2. Select "Preview operational configuration" and edit the attribute "httpRegularPort" to be 7070.
  3. Deploy your environment by selecting "Sync from parent stage: Beta" on the Apollo page.
  4. Once that is done, enter the following command from within your workspace to set it as a local override:
      ```
      % brazil workspace env attach --alias ATVMetadataIngestionService
      ```

5. Set up a local endpoint at [Coral Diver](https://coral.amazon.com/ATVMetadataIngestionService/Global/Beta/configure)
by entering your local host and port.

6. Make [ATVMetadataIngestionServiceClientConfig](https://code.amazon.com/packages/ATVMetadataIngestionServiceClientConfig/trees/mainline)
point to your local host and port by editing
[ATVMetadataIngestionServiceBeta.config](https://code.amazon.com/packages/ATVMetadataIngestionServiceClientConfig/blobs/mainline/--/coral-config/ATVMetadataIngestionServiceBeta.config)
so that Base.Beta reflects your local host and port number.

7. Be sure to start the [AAA Daemon](https://w.amazon.com/bin/view/AAA/Guide/Testing/AAAWorkspaceSupport#How_do_I_set_up_my_workspace.2C_so_that_I_can_work_on_AAA-enabled_applications.3F)
before running integration tests.


# More Info
### Service APIs
>IngestTitleMetadata<br>
*    [MIS IngestTitleMetadata wiki](https://w.amazon.com/bin/view/AIV/Metadata/Internal/Services/ATVMetadataIngestionService#IngestTitleMetadata)

>IngestMetadataContribution
*    [MIS IngestMetadataContribution wiki](https://w.amazon.com/index.php/AIV/Metadata/Internal/Services/ATVMetadataIngestionService#IngestMetadataContribution)
