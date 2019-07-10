# Meter generation for dataconn
      
	   Proposed Mechanism : Micrometer
	
	   ## Micrometer
	   Micrometer provides a simple facade over the instrumentation clients for the most popular monitoring systems. It is SLF4J, but for application metrics.
	  
	   Micrometer works with Meter Registries. It provides Meter registries for various application monitoring systems. Since we are not sending metrics to any monitoring system, we choose
	   LoggingMeterRegistry.
		
		
	   ### LoggingMeterRegistry 
	          1) LoggingMeterRegistry dumps logs in a files.  
			  2) It summarizes the metrics to a logger
			  3) It works on step. The width of the step is the interval at which metrics are dumped. It is set to 1 minute for LoggingMeterRegistry.
			  4) Gauge metrics are dumped in every cycle (of 1 minute).
			  5) Counter and Timer metrics are updated only when the value changes.
			  6) We can create custom config as per requirement. 

		
	
 
       ## How to use 
	
	     ### Add maven dependency in pox.xml
		 <dependency>
			 <groupId>io.micrometer</groupId>
			 <artifactId>micrometer-core</artifactId>
			 <version>1.2.0</version>
		 </dependency>
	
	     ### isInstrumentationAvailable()
		 Just before creating a registry for each component. we can include isInstrumentationAvailable method to check class path for Micrometer. isInstrumentationAvailable methd provided by Project Reactor.
		
		 Metrics.isInstrumentationAvailable();  // It will return true or false
	
	     ### create LoggerMeterRegistry
  
		 LoggingMeterRegistry oneSimpleMeter = new LoggingMeterRegistry();  // for using default configuration
		 LoggingMeterRegistry oneSimpleMeter = new LoggingMeterRegistry(new CustomConfig(), Clock.SYSTEM); // for using custom config for LoggerMeterRegistry
	
	     ### Flux default metrics 
		 For flux default metrics , we have to add registry
		
		 io.micrometer.core.instrument.Metrics.addRegistry(oneSimpleMeter);
		
	     Create a FileAppender in logback.xml for each component in DataConn. Attach the logger for LoggingMeterRegistry class with the defined FileAppender. We can also write headers to the file.
	
        ## Example

```groovy

package logging;
import io.micrometer.core.instrument.logging.LoggingMeterRegistry;
import reactor.core.publisher.Flux;
public class MicroMeterLog {
    public static void main(String[] args) throws InterruptedException {

        LoggingMeterRegistry logRegistory = new LoggingMeterRegistry();

        io.micrometer.core.instrument.Metrics.addRegistry(logRegistory);;


        Flux < String > dataStream = Flux.just("AA", "BB", "CC", "DD");

        dataStream.name("micor-meter-poc").tag("key", "value").metrics().subscribe(p - > {
            System.out.println(" Value -- " + p);
            try {
                Thread.sleep(1000);
            } catch (InterruptedException e) {
                e.printStackTrace();
            }
        });

        Thread.sleep(1000000000);
    }
};
```


